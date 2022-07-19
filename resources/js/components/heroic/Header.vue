<script>
import Welcome from "./Welcome";
import Button from "./Button";

export default {
    name: "Header",
    components: {
        Welcome,
        Button
    }
}
</script>

<template>
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <Welcome msg="A warm welcome!"></Welcome>
                    <p class="fs-4">Bootstrap utility classes are used to create this jumbotron since the old component has been removed from the framework. Why create custom CSS when you can use utilities?</p>
                    <Button label="Call to action"></Button>
                </div>
            </div>
        </div>
    </header>
</template>
