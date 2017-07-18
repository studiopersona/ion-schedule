<template>
	<div>
		<div class="jumbotron jumbotron-fluid featured-show" :style="'background-image:url(' + featured.image + ')'">
			<div class="container">
		    	<h1 class="display-3 tune-in-time">{{ featured.tune_in_time }}</h1>
		  	</div>
		  	<days v-on:new-date-selected="emitNewDateSelected" :schedule-dates="scheduleDates"></days>
		</div>
	</div>
</template>

<script>
import Days from './Days.vue'

export default {

	components: {
		days: Days,
	},

	props: ['scheduleDates', 'featured'],

	methods: {

		emitNewDateSelected(index) {
			this.$emit('new-date-selected', index)
		}

	},
}
</script>