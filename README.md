J1
My HomeController is not a resource controller because its index() method only prepares and displays the application’s home page. It does not manage resource operations such as listing, viewing, creating, editing, updating, or deleting medicines.

J2
Before adding withQueryString(), the pagination links included only the page number. As a result, the controller received the new page number but lost the current search, filter, and sort parameters.

J3
A misspelled sort value can silently produce unintended results instead of clearly indicating that the input is invalid. The allowed list prevents this by accepting only permitted column names and falling back to sorting by name when an invalid value is provided