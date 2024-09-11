<template>
    <div>
        <h2>Register</h2>
        <form @submit.prevent="register">
            <input v-model="name" type="text" placeholder="Name">
            <input v-model="email" type="email" placeholder="Email">
            <input v-model="password" type="password" placeholder="Password">
            <input v-model="password_confirmation" type="password" placeholder="Confirm Password">
            <button type="submit">Register</button>
        </form>
    </div>
</template>
