#Utopia - Web-App for Women's Day hackathon

A web app to help you achieve your goals by making you fill an introspective questionnaire about your goal everyday.

##Features:

1. View and edit user profile
2. Create goals with deadline
3. Add tasks to the goals
4. Keep track of the completed tasks
5. Fill introspection questionnaire for each goal everyday
6. Get email notifications for filling the questionnaire
7. See your progress in form of informative charts and graphs
8. View and post top motivational stories.
9. Voting on motivationastylel stories.
10. Recommended motivational stories based on your interests and upvote activity (Content based and cllaborative recommendations).
11. Conclusions and insights based on your data (questionnaire, task completion etc.).

##Tech. Used

1. PHP MVC framework - Limonade
2. Frontend - Twitter Bootstrap, jquery, font-awesome, masonry.js, chart.js
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

