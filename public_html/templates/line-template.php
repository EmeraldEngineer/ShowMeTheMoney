<h1>Line Chart</h1>
<!--Line chart stuff goes here-->


<div class="row">
	<div class="col-md-6">
		<div style="display: block;">
			<canvas baseChart width="400" height="400"
					  [datasets]="lineChartData"
					  [labels]="lineChartLabels"
					  [options]="lineChartOptions"
					  [colors]="lineChartColors"
					  [legend]="lineChartLegend"
					  [chartType]="lineChartType"></canvas>
		</div>
	</div>
	<!--<div class="col-md-6" style="margin-bottom: 10px">
		<table class="table table-responsive table-condensed">
			<tr>
				<th *ngFor="let label of lineChartLabels">{{label}}</th>
			</tr>
			<tr *ngFor="let d of lineChartData">
				<td *ngFor="let label of lineChartLabels; let j=index">{{d && d.data[j]}}</td>
			</tr>
		</table>
	</div>-->
</div>

