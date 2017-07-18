<template>
	<div>
		<featured :schedule-dates="scheduleDates"></featured>
		<schedule :api-date="apiDate"></schedule>
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
			apiDate: '',
		}
	},

	created() {
		this.apiDate = this.scheduleDates[0].apiDate
	},

	events: {
		'new-date-selected'(newDate) {
			this.apiDate = newDate
		}
	}
}
</script>