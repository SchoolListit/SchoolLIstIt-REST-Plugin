# SchoolListIt REST API

SchoolListIt REST API is a WordPress plugin that essentially functions as one of many backend servers for the SchoolListIt App. 

## Information Architecture within the plugin and app

### School Definition -
A school is any community of learners unified together in the common goal to promote learning.

There are no other constraints enforced on your school by this software. It must however, only allow appropriate content and conduct. Please moderate the content of your school, and remember we allow learners of all ages.

### Classes, Teachers, Subjects, Grades -
Classes are the congruence of a teacher, subject, and grade. Teachers and subjects are not hierarchal to any one school. They are also not hierarchal to each other. In other words, any ‘assignment’ or lesson on SchoolListIt can be added to any school, class, teacher, or subject.

You should think of schools, teachers, subjects, grades as #Hashtags because under the hood, in the code, that is exactly what they are. More specifically schools, classes, teachers, subjects, grades are custom WordPress tags attached to assignments. Assignments are posts. These special tags can be used in any combination to define a new class.

**Removing classes** -
In practice, this means that any school or class will no longer show in your class feed when all of its due dates have expired and/or all the posts tagged with that school/class have been deleted. We hope this is an accurate picture of life. The platform archives unused and/or stale tags.

**Assignment Date / Due Date** -
Assignment date is not like a hashtag. It is intrinsically linked to that assignment. It can be changed, but this is not the proper vehicle by which to “carry forward” an assignment to the next learning cycle. You should change the assignment date only to correct a mistake. Assignment Date and Due Date are WordPress post meta.

**Keywords** - 
Keywords are also tags, and used in the traditional WordPress way. They are considered in search on SchoolListit, and we hope also on other search engines.

## Security
Our application is built with security in mind. Through ReactJS we are decoupled from our database. API calls are encrypted. The student information lives only on the local device of the user. That student name, grade, and school is only exposed to the REST API via one encrypted call. We do not have any student performance data co-mingled with our engagement analytics.

### Distributed Databases
The safest scenario would be for each school system to host its own instance of the SchoolListIt REST API plugin. Every distributed SchoolListIt database can still be rendered into the SchoolListIt app and globally available. By stringing together many smaller WordPress Databases, the whole system will be more secure from an attack and more performant.

## Installation

Download zip file
Open your wordpress dashboard - the wp-admin page on most sites - and click upload.
Install and Activate.

### Settings

TODO: need to build a WP admin interface for API Keys, etc to handle the verification of sites with SchoolListIt and authentication. I have built the authentication, but no method by which these other websites can get an api key, etc.

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