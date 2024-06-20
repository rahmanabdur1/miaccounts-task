<template>
  <div>
    <h2>Hierarchical Report</h2>
    <ul>
      <li v-for="item in reportData" :key="item.id">
        {{ item.name }}: {{ item.total_amount }}
      </li>
    </ul>
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
    fetch('/reports/hierarchical')
      .then(response => response.json())
      .then(data => {
        this.reportData = data;
      });
  }
}
</script>
