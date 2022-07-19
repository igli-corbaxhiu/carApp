<template>
    <div class="col-lg-6 col-xxl-4 mb-5">
        <div class="card bg-light border-0 h-100">
            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                <slot name="icon"></slot>
                <h2 class="fs-4 fw-bold"><slot name="heading"></slot></h2>
                <p class="mb-0"><slot name="content"></slot></p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Card"
}
</script>
