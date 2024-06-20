<template>
  <div>
    <h2>Tabular Report</h2>
    <table>
      <thead>
        <tr>
          <th>Acc Head id</th>
          <th>G. Lvl 1</th>
          <th>G. Lvl 2</th>
          <th>G. Lvl 3</th>
          <th>Acc Head Total</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in reportData" :key="item.account_head_id">
          <td>{{ item.account_head_id }}</td>
          <td>{{ item.lvl1_name }}</td>
          <td>{{ item.lvl2_name }}</td>
          <td>{{ item.lvl3_name }}</td>
          <td>{{ item.total_amount }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      reportData: []
    }
  },
  mounted() {
    fetch('/reports/tabular')
      .then(response => response.json())
      .then(data => {
        this.reportData = data;
      });
  }
}
</script>
