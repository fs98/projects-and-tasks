<template>
  <div class="flex h-full justify-center items-center w-full">
    <div>

      <div>
        <h1 class="mb-6 text-center font-bold text-gray-600">
          Login Form
        </h1>
      </div>

      <form @submit.prevent="handleLogin" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
          </label>
          <input v-model="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Email">
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password
          </label>
          <input v-model="password" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" placeholder="******************">
          <p class="text-red-500 text-xs italic hidden">Please choose a password.</p>
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Sign In
          </button> 
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
    data() {
      return {
        'email' : '',
        'password' : ''
      }
    },
    methods: {

      handleLogin() {
        alert(this.email);
        alert(this.password);

        axios.get('/sanctum/csrf-cookie').then(response => {
            
            axios.post('/api/authenticate', {

                email: this.email,
                password: this.password

            }).then( res => {

                this.$router.push({
                  name: 'dashboard'
                })

            }).catch( err => {

                console.log(err);

            })
        });
      }

    }
}
</script>