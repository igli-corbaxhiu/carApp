<template>
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <Card>
                    <template #icon>
                        <FreshLayoutIcon></FreshLayoutIcon>
                    </template>
                    <template #heading>
                        Fresh new layout
                    </template>
                    <template #content>
                        With Bootstrap 5, we've created a fresh new layout for this template!
                    </template>
                </Card>

                <Card>
                    <template #icon>
                        <DownloadIcon></DownloadIcon>
                    </template>
                    <template #heading>
                        Free to download
                    </template>
                    <template #content>
                        As always, Start Bootstrap has a powerful collection of free templates.
                    </template>
                </Card>

                <Card>
                    <template #icon>
                        <JumbotronIcon></JumbotronIcon>
                    </template>
                    <template #heading>
                        Jumbotron hero header
                    </template>
                    <template #content>
                        The heroic part of this template is the jumbotron hero header!
                    </template>
                </Card>

                <Card>
                    <template #icon>
                        <FeatureBoxIcon></FeatureBoxIcon>
                    </template>
                    <template #heading>
                        Feature boxes
                    </template>
                    <template #content>
                        We've created some custom feature boxes using Bootstrap icons!
                    </template>
                </Card>

                <Card>
                    <template #icon>
                        <CleanCodeIcon></CleanCodeIcon>
                    </template>
                    <template #heading>
                        Simple clean code
                    </template>
                    <template #content>
                        We keep our dependencies up to date and squash bugs as they come!
                    </template>
                </Card>

                <Card>
                    <template #icon>
                        <TrustIcon></TrustIcon>
                    </template>
                    <template #heading>
                        A name you trust
                    </template>
                    <template #content>
                        Start Bootstrap has been the leader in free Bootstrap templates since 2013!
                    </template>
                </Card>

            </div>
        </div>
    </section>
</template>

<script>
import Card from "./Card";
import CleanCodeIcon from "../icons/CleanCodeIcon";
import FreshLayoutIcon from "../icons/FreshLayoutIcon";
import DownloadIcon from "../icons/DownloadIcon";
import JumbotronIcon from "../icons/JumbotronIcon";
import FeatureBoxIcon from "../icons/FeatureBoxIcon";
import TrustIcon from "../icons/TrustIcon";

export default {
    name: "Home",
    components: {TrustIcon, CleanCodeIcon, FeatureBoxIcon, JumbotronIcon, DownloadIcon, FreshLayoutIcon, Card}
}
</script>
