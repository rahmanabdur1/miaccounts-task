<template>
  <div>
    <HierarchicalReport />
    <TabularReport />
  </div>
</template>

<script>
import HierarchicalReport from './components/HierarchicalReport.vue';
import TabularReport from './components/TabularReport.vue';

export default {
  components: {
    HierarchicalReport,
    TabularReport
  }
}
</script>
