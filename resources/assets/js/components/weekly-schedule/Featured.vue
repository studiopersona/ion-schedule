<template>
	<div>
		<div class="jumbotron jumbotron-fluid featured-show">
			<div class="container">
		    	<h1 class="display-3 tune-in-time">Tonight, 8|7c PM</h1>
		  	</div>
		  	<days :schedule-dates="scheduleDates"></days>
		</div>
	</div>
</template>

<script>
import Days from './Days.vue'

export default {

	components: {
		days: Days,
	},

	props: ['scheduleDates'],

	data() {
		return {

		}
	},

	ready() {

	},

	watch: {

	},

	computed: {

	},

	methods: {



	},

	events: {

	}
}
</script>