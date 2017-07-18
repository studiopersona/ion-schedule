<template>
	<div>
		<featured :schedule-dates="scheduleDates"></featured>
		<schedule></schedule>
	</div>
</template>

<script>

import Schedule from './weekly-schedule/Schedule.vue'
import Featured from './weekly-schedule/Featured.vue'

export default {

	components: {
		featured: Featured,
		schedule: Schedule,
	},

	props: [],

	data() {
		return {
			scheduleDates: scheduleDates,
		}
	},

	ready() {

	},

	methods: {



	},

	events: {

	}
}
</script>