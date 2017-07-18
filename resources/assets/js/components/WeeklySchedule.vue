<template>
	<div>
		<featured :schedule-dates="scheduleDates" v-on:new-date-selected="changeScheduleContent"></featured>
		<schedule :schedules="schedules" :schedules-index="schedulesIndex"></schedule>
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
			scheduleDates: window.scheduleDates,
			schedules: window.schedules,
			schedulesIndex: 0,
		}
	},

	methods: {

		changeScheduleContent(index) {
			this.schedulesIndex = index
		}

	},

	events: {
		'new-date-selected'(index) {
			console.log('new date selected')
			console.log(index)
			this.schedulesIndex = index
		}
	}
}
</script>