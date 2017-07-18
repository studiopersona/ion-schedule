<template>
	<div>
		<div class="row-fluid content">
        	<div class="row">
            	<div class="col-xs-12">
                	<div v-for="program in schedule" class="panel-group schedule" id="accordion" role="tablist" aria-multiselectable="false">
                		<div class="panel panel-default schedule-item ">
                			<div class="panel-heading" role="tab" :id="'program-heading-' + program.timestamp">
                				<div class="panel-title ">
      								<div data-toggle="collapse" data-parent="#accordion" :href="'#program-' + program.timestamp" aria-expanded="" :aria-controls="'program-' + program.timestamp">
      									<div class="container">
	      									<div class="row">
												<div class="col-xs-3 col-md-3">
													<h2>{{ program.time }} {{ program.time_zone }}</h2>
												</div>
												<div class="col-xs-9 col-md-9">
													<strong>{{ program.showName }}</strong>
													<p>Episode {{ program.episodenumber }}: {{ program.episodetitle }} </p>
												</div>
												<span class="schedule-dropdown"><em class="drop-content-icon fa fa-angle-down"></em></span>
											</div>
										</div>
							      	</div>
							    </div>
							</div>
							<div :id="'program-' + program.timestamp" class="panel-collapse collapse " role="tabpanel" :aria-labelledby="'program-heading-' + program.timestamp">
    							<div class="panel-body primary-bg-color">
    								<div class="container">
		        						<div class="row">
		        							<div class="col-xs-12 col-sm-4">
		        								<div class="video-thumbnail">
		        									<a :href="program.link">
														<img :src="program.image" class="img-responsive headline">
													</a>

												</div>
		        							</div>
			        						<div class="col-xs-12 col-sm-8">
			        							<p class="tv-rating">({{ parseInt(program.duration, 10)/60 }} MIN)</p>
			        							<p>{{ program.synopsis }}</p>
			        						</div>
											<br clear="all">
			        					</div>
			     					</div>
		    					</div>
							</div>
						</div>
					</div>
	            </div>
	        </div>
	    </div>
	</div>
</template>

<script>

export default {

	props: ['schedules', 'schedulesIndex'],

	data() {
		return {
			schedule: [],
		}
	},

	created() {
		this.schedule = this.schedules[0]
	},

	watch: {
		schedulesIndex: function() {
			this.schedule = this.schedules[this.schedulesIndex]
		},
	},

	methods: {

	},
}
</script><p>