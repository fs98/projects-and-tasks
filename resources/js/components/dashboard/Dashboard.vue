<template>
  <div>
    This is coming from Dashboard Component.
    {{ user }}
  </div>
</template>

<script>
export default {
    data() {
        return {
          user: [

          ]
        }
    },
    mounted() {
        axios.get('api/user').then(res => {
          this.user = res.data;
        });
    }
}
</script>