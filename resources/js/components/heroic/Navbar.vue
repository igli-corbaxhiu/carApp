<script>
export default {
    name: "Navbar"
}
</script>

<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-lg-5">
            <router-link to="#" class="navbar-brand">Start Bootstrap</router-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <router-link to="/" class="nav-link nav-item active">Home</router-link>
                    <router-link to="/about" class="nav-link nav-item">About</router-link>
                </ul>
            </div>
            <router-view></router-view>
        </div>
    </nav>
</template>
