#Utopia - Web-App for Women's Day hackathon

A web app to help you achieve your goals by keeping you committed through motivational stories, introspective questionnaire and detailed self assesment. We have focused on four areas to help the user increase his productivity and commit to long term goals.

### 1. Motivation:
We have a motivational stories and anecdote sharing platform (endpoint: /motivation) where you can read stories posted by other users and post your own stories (endpoint: /post_story). The stories will be appropriately tagged for you to help search content easily. There will be voting functionaity on the stories and the most popular stories will appear on the homepage. Personalized recommendations based on your interests and voting activity will be shown to you (endpoint: /recommendations).

### 2. Planning and Introspection: 
You can create goals with a deadline (endpoint: /new_goal) and manage them (endpoint: /goals). On each goal page (endpoint: /goal/:gid) , you can create a task list for achieving that goal and keep track of their completion. Everyday, you will be prompted ( through email notifications ) to fill an introspective questionnaire (endpoint: /questionnaire/:gid) so that you may keep track of your progress and stay motivated to complete everyday tasks and also manage your time. You can see the list of all you pending tasks (in increasing order of deadline) in a to-do list (endpoint: /list).

### 3. Analysis and Self assesment:
This page (endpoint: /analysis) shows you informative charts and graphs that help you visualize your progress on your goals over time. Currently it shows three kinds of charts. First is a line chart that plots time spent on the goals daily. Second shows a comparison of time spent on the goals vs. the planned time in form of a bar chart. Third is doughnut chart to show relative hours spent on the goals in the last week.


### 4. Insights on user's performance:
Here (endpoint: /insights) we will analyze your questionnaire responses over time. A detailed insights into your working pattern will be provided in order to help you improve your focus and work on removing your weaknesses.

##Features:

1. View and edit user profile
2. Create goals with deadline
3. Add tasks to the goals
4. Keep track of the completed tasks
5. Fill introspective questionnaire for each goal everyday
6. Email notifications for questionnaire reminder
6. Get email notifications for filling the questionnaire
7. See your progress in form of informative charts and graphs
8. View and post top motivational stories.
9. Tagged motivational stories sharing platform
10. Voting on motivationastylel stories.
11. Recommended motivational stories based on your interests and upvote activity (Content based and collaborative recommendations).
12. Conclusions and insights based on your data (questionnaire, task completion etc.).

##Tech. Used

1. PHP MVC framework - Limonade
2. Frontend:
	- Twitter Bootstrap
	- jquery
	- font-awesome
	- masonry.js
	- chart.js
	- hint-css
3. Version control - Git

##Setup:

1. Clone this repository.

2. Import the database schema from schema/productivity.sql

3. Create and provide read/write access to public/images/ folder.

4. Copy config/config.example.php to config/config.php and make necessary changes, use the app_secret you got from the above step.

5. ###CREATE VIRTUAL HOST
	####Copy the default virtual host
	_sudo cp utopia.local /etc/apache2/sites-available/_
	_sudo geany /etc/apache2/sites-available/utopia.local_
	####Change the documentroot to the app's root directory on your machine
	_sudo a2enmod rewrite_
	_sudo a2ensite utopia.local_
	_sudo service apache2 reload_

6. ###ADD ENTRY IN HOSTS FILE
	_sudo geany /etc/hosts_
	####Add the following line to your /etc/hosts file
	_127.0.0.1    utopia.local_

