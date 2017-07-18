<template>
	<div>
		<div class="container-fluid hidden-xs schedule-dates-wrapper">
                <div class="row schedule-dates text-center">
                    <div class="container-fluid">
                        <!--<div v-for="date in scheduleDates" class="col-xs-8 col-sm-1 col-sm-offset-1 col-md-1 start-of-week selected">
                            <a @click="showSchedule(date.apiDate)">
                                <h3 class="">
                                    <strong>{{ date.airDay }}</strong><br><span class="air-date">{{ date.airDate }}</span>
                                </h3>
                            </a>
                        </div>-->
                        <div class="col-xs-12 col-sm-8">
                            <div class="row-fluid">
                                <a  v-for="date in scheduleDates" @click="showSchedule(date.apiDate)">
                                    <div class="col-xs-12 col-sm-2 ">
                                        <h3>
                                            <strong>{{ date.airDay }}</strong><br><span class="air-date">{{ date.airDate }}</span>
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row blue-bar" style="margin:-5px 0; ">
                    <div class="col-md-10 col-md-offset-1" style="height:4px; background-color: #00a3f6;"></div>
                </div>
            </div>
	</div>
</template>

<script>

export default {

	components: {

	},

	props: ['scheduleDates'],

	methods: {

        showSchedule(date) {
            console.log(date)

        },

	},

	events: {

	}
}
</script>