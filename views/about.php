<div class="container">
	<div class="row-fluid header">
		<h2>About</h2>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content">
		<h4>Web App for Women's Day Hackathon</h4>
		<p>A web app to help you achieve your goals by keeping you committed through motivational stories, introspective questionnaire and detailed self assesment. We have focused on four areas to help the user increase his productivity and commit to long term goals.</p>
		<ol>
			<li><b>Motivation</b><br>
				<p>We have a motivational stories and anecdote sharing platform (endpoint: /motivation) where you can read stories posted by other users and post your own stories (endpoint: /post_story). The stories will be appropriately tagged for you to help search content easily. There will be voting functionaity on the stories and the most popular stories will appear on the homepage. Personalized recommendations based on your interests and voting activity will be shown to you (endpoint: /recommendations).</p>
			</li>
			<li><b>Planning and Introspection</b><br>
				<p>You can create goals with a deadline (endpoint: /new_goal) and manage them (endpoint: /goals). On each goal page (endpoint: /goal/:gid) , you can create a task list for achieving that goal and keep track of their completion. Everyday, you will be prompted ( through email notifications ) to fill an introspective questionnaire (endpoint: /questionnaire/:gid) so that you may keep track of your progress and stay motivated to complete everyday tasks and also manage your time. You can see the list of all you pending tasks (in increasing order of deadline) in a to-do list (endpoint: /list).</p>
			</li>
			<li><b>Analysis and Self assessment</b><br>
				<p>This page (endpoint: /analysis) shows you informative charts and graphs that help you visualize your progress on your goals over time. Currently it shows three kinds of charts. First is a line chart that plots time spent on the goals daily. Second shows a comparison of time spent on the goals vs. the planned time in form of a bar chart. Third is doughnut chart to show relative hours spent on the goals in the last week.</p>
			</li>
			<li><b>Insights on user's performance</b><br>
				<p>Here (endpoint: /insights) we will analyze your questionnaire responses over time. A detailed insights into your working pattern will be provided in order to help you improve your focus and work on removing your weaknesses.</p>
			</li>
		</ol>
	</div>
</div>