<template>
    <a class="btn btn-primary btn-lg" href="#!">{{ label }}</a>
</template>

<script>
export default {
    name: "Button",
    props: {
        label: String
    }
}
</script>
