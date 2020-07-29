# SchoolListIt REST API

SchoolListIt REST API is a WordPress plugin that essentially functions as one of many backend servers for the SchoolListIt App. It does a few key things including:
- creates custom post type for assignment
- creates the custom taxonomies school, teacher, subject, grade
- creates the endpoints associated with push-pull CRUD on the assignment post type from the SchoolListIt app
- handles OAuth authentication for secure API calls (given a valid API KEY, a token is provided and on the second call the task is performed.)

## Information Architecture within the plugin and app
The architecture is designed to facilitate flexibility and ease of use. Rather than taking the traditional approach for most education system, it is the goal of SchoolListIt to eliminiate the 'overhead' of posting information. Following the model of Facebook Groups and Google Places anyone can create a school, teacher, class, or assignment. Later, the school or teacher can 'verify' and gain read/write access to any content tagged as belonging to that school and/or class. 

The idea is to circumvent the headache of using the existing systems for teachers and parents, but also for SchoolListit gaining API access. Via this plugin and the SchoolListIt app, we provide parents and teachers a tool that is quick and easy to use and not limited by the security and heiarchy of current school information systems. 

### Assignments
An assignment is the only 'object' which is created by and lives within this plugin. For a school to be an 'object' in WordPress, it should have its own WP installation (ie WordPress website with this plugin installed). Therein, the school is associated with an assignment by any user within the app tagging an assignment to a school. 

### Schools
A school in the SchoolListIt application can be created on the fly. There are no constraints placed by the app on who or how a school can be created. 

### Classes, Teachers, Subjects, Grades
Classes are the congruence of a teacher, subject, and grade. Teachers and subjects are not hierarchal to any one school. They are also not hierarchal to each other. In other words, any ‘assignment’ or lesson on SchoolListIt can be added to any school, class, teacher, or subject.

Think of schools, teachers, subjects, and grades as #Hashtags because under the hood, in the code, that is exactly what they are. More specifically schools, classes, teachers, subjects, and grades are custom WordPress tags attached to assignments. Assignments are posts. These special tags can be used in any combination to define a new class.

These can also be created on the fly.

**Removing classes**
In practice, this means that any school or class will no longer show in the class feed when all of its due dates have expired and/or all the posts tagged with that school/class have been deleted. We hope this is an accurate picture of life. The platform archives unused and/or stale tags.

### Assignment Date / Due Date
Assignment date is not like a hashtag. It is intrinsically linked to the assignment. It can be changed, but this is not the proper vehicle by which to “carry forward” an assignment to the next learning cycle. You should change the assignment date only to correct a mistake. Assignment Date and Due Date are WordPress post meta.

### Keywords 
Keywords are also tags, and used in the traditional WordPress way. They are considered in search on SchoolListit, and we hope also on other search engines.

## Security
SchoolListIt was designed with security in mind. Through ReactJS we are decoupled from our database. API calls are encrypted. The student information lives only on the local device of the user. That student name, grade, and school is only exposed to the REST API via one encrypted call. We do not have any student performance data co-mingled with engagement analytics.

### Distributed Databases
The safest scenario would be for each school system to host its own instance of the SchoolListIt REST API plugin. Every distributed SchoolListIt database can still be rendered into the SchoolListIt app and globally available. By stringing together many smaller WordPress Databases, the whole system will be more secure from an attack and more performant.

## Installation

Download zip file
Open your wordpress dashboard - the wp-admin page on most sites - and click upload.
Install and Activate.

### Settings

* TODO: need to build a WP admin interface for API Keys, etc to handle the verification of sites with SchoolListIt and authentication. I have built the authentication, but no method by which these other websites can get an api key, etc.

### That's it.
You now have the 'assignments' post type and all the custom taxonomies needed to share assignments and due dates with SchoolListIt. 

The Rest API should be live and working. To test that, visit yoursite.com/wp-json/schoollistit/v2/lesson-plans

* NOTE: many sites have globally disabled the REST API. If you've done that this plugin won't work.


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

- NEED: we need a contributor able to bring this plugin up to standard for publishing on the WP repository, and to make all the neccesary checks to ensure that it would pass through any TIDE checks and requirements.

## License
[GPL2+](http://www.gnu.org/licenses/gpl-3.0.html)  SchoolListIt REST API is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or any later version.

SchoolListIt REST API is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. 

You should have received a copy of the GNU General Public License along with SchoolListIt REST API. If not, see http://www.gnu.org/licenses/gpl-3.0.html.