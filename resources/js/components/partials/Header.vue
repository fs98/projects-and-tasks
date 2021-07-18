<template>

    <header class="min-h-10 py-2 bg-blue-800 flex justify-between items-center items-center">
        <h1 class="text-4xl ml-6 text-white">Projectify</h1>
        <ul class="flex">
            <li class="mr-6">
                <router-link :to="{name: 'dashboard'}" class="text-blue-600 hover:text-white">
                    Dashboard
                </router-link>
            </li>
            <li class="mr-6">
                <router-link :to="{name: 'projects'}" class="text-blue-600 hover:text-white">
                    Projects
                </router-link>
            </li>
            <li class="mr-6">
                <router-link :to="{name: 'login'}" class="text-blue-600 hover:text-white">
                    Login
                </router-link>
            </li>
            <li class="mr-6">
                <a href="" class="text-blue-600 hover:text-white">Logout</a>
            </li>
        </ul>
        <!-- <nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0">
            <a href="/" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Projectify</a>
        </div>
        <div>
            <a href="/dashboard" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Dashboard</a>
            <a href="/projects" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Projects</a>
            <a href="#" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Login</a>
            <a href="#" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Logout</a>
        </div>
        </nav> -->
    </header>

</template>