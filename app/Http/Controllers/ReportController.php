<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReportController extends Controller
{
    public function hierarchicalReport()
    {
        $result = DB::select('
            WITH RECURSIVE account_tree AS (
                SELECT id, name, parent_id, 0 AS level
                FROM account_heads
                WHERE parent_id IS NULL
                UNION ALL
                SELECT ah.id, ah.name, ah.parent_id, at.level + 1
                FROM account_heads ah
                INNER JOIN account_tree at ON ah.parent_id = at.id
            )
            SELECT at.id, at.name, IFNULL(SUM(t.debit - t.credit), 0) as total_amount
            FROM account_tree at
            LEFT JOIN transactions t ON at.id = t.account_head_id
            GROUP BY at.id, at.name, at.level
            ORDER BY at.level, at.parent_id, at.id
        ');

        return response()->json($result);
    }

    public function tabularReport()
    {
        $result = DB::select('
            SELECT ah.id as account_head_id, ah.name as account_head_name,
            lvl1.name as lvl1_name, lvl2.name as lvl2_name, lvl3.name as lvl3_name, 
            IFNULL(SUM(t.debit - t.credit), 0) as total_amount
            FROM account_heads ah
            LEFT JOIN transactions t ON ah.id = t.account_head_id
            LEFT JOIN account_heads lvl3 ON lvl3.id = ah.parent_id
            LEFT JOIN account_heads lvl2 ON lvl2.id = lvl3.parent_id
            LEFT JOIN account_heads lvl1 ON lvl1.id = lvl2.parent_id
            GROUP BY ah.id, ah.name, lvl1.name, lvl2.name, lvl3.name
            ORDER BY ah.id
        ');

        return response()->json($result);
    }
}
