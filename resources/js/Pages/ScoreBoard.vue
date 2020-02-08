<template>
    <div>
        <bats-man-score-board></bats-man-score-board>
        <bowler-score-board class="mt-3"></bowler-score-board>
    </div>
</template>

<script>
    import BatsManScoreBoard from "../Components/BatsManScoreBoard";
    import BowlerScoreBoard from "../Components/BowlerScoreBoard";
    export default {
        name: "ScoreBoard",
        components: {BowlerScoreBoard, BatsManScoreBoard},
        props:{
            batsManScored:{
                required: true
            }
        },
        created() {
            console.log(this.data)
        }
    }
</script>

<style scoped>

</style>
