**Thoughts about the code**
overall code is okay but a lot of improvements can be made to improve its readabilty, scalabilty, and reducing code duplication. 
structure is fine. creating a controller and calling methods from repository to perform CRUD operations is a good approach. further more seperating Business logic from controller to create services classes is also possible. it will help reducing the complexity of understanding of controller & repository. 

**Booking Controller Refactoring**
Instead of $data = $request->all(); used Laravel's request validation. created Booking Request.<br/>
Removed duplicated code and used repository methods instead of writing code inside controller.<br/>
Method Naming: Renamed some methods to make their purpose clearer.<br/>
Calling envrioment variables directly in code is not a good approach. that's why i have created config file for it.<br/> 
Controller fucntions are now calling methods from the repository, promoting the use of interfaces.<br/>

**Booking Repository** 
Added some missing methods in repository that are used in booking controller.<br/>
Consistent naming convention not followed. for example $cuser, $job_id,<br/>
Also constants or enums can be used to reuse named constants. job_type = paid, unpaid, etc. <br/>
used User model instead of doing DB::table('users')<br/>
