<template>
	<div>
		<div class="container-fluid hidden-xs schedule-dates-wrapper">
                <div class="row schedule-dates text-center">
                    <div class="container-fluid">
                        <div class="col-xs-12 col-sm-12">
                            <div class="row-fluid">
                                <div class="col-xs-12 col-sm-2"></div>
                                <a  v-for="(date, index) in scheduleDates" @click="showSchedule(index)">
                                    <div class="col-xs-12 col-sm-1" :class="[ (scheduleDates[index].selected) ? 'selected' : '' ]">
                                        <h3>
                                            <strong>{{ date.airDay }}</strong><br><span class="air-date">{{ date.airDate }}</span>
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>
</template>

<script>

export default {

	components: {

	},

	props: ['scheduleDates'],

    data() {
        return {
            selectedDayIndex: 0,
        }
    },

	methods: {

        showSchedule(index) {
            console.log(index)
            this.$emit('new-date-selected', index)

            this.scheduleDates[this.selectedDayIndex].selected = false
            this.scheduleDates[index].selected = true
            this.selectedDayIndex = index
        },

	},
}
</script>