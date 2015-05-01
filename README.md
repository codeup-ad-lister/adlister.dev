# Ad Lister Project

* FYI Credentials are saved in a gitignored .env.php file. *

The Ad Lister project is a modified craigslist clone that will help test and solidify your understanding of the HTML, CSS, JavaScript, and PHP concepts you have learned so far in this course. You will be working on this project in teams of two to three. Teams of two are preferred unless there are an odd number of students, forcing one team of three.

This project is meant to be a challenge. Working through tough challenges that require lots of coding will help take your skills and confidence to the next level.

Here are the primary goals of the project:

Gain experience in building a well-designed in PHP site without the use of a framework.
Learn how to use Git in a team environment.
Test your resourcefulness in solving problems.

# Getting Started
1. Clone this repo into `~/vagrant-lamp/sites/` so that it creates adlister.dev/ there.
2. Setup a host for adlister.dev
3. Create your `.env.php` file
4. Create a new database
5. Run `/database/migrations.php` in order to create tables.
6. Run `/database/seeder.php` in order to seed the tables with test data.

# $_ENV setup
1. Open env-template.php to see the fields you should use to create your .env.php file.
2. Specify your environmental variables and credentials within your .env.php file.
3. So that you DO NOT commit passwords, double check that .env.php is added to .gitignore.
