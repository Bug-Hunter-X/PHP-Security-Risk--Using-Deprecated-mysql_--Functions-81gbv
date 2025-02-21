# PHP Security Vulnerability: Deprecated mysql_* Functions

This repository demonstrates a common security vulnerability in PHP applications stemming from the use of deprecated `mysql_*` functions.  These functions are prone to SQL injection, making your application susceptible to attacks.

The `bug.php` file shows the vulnerable code.  The `bugSolution.php` demonstrates the secure alternative using MySQLi or PDO.

**Vulnerability:** The vulnerable code uses `mysql_connect`, `mysql_query`, `mysql_fetch_assoc`, `mysql_free_result`, and `mysql_close`.  These functions are deprecated and do not offer protection against SQL injection.

**Solution:** Use parameterized queries (prepared statements) with MySQLi or PDO to prevent SQL injection vulnerabilities.

**Recommendations:**
* Always sanitize user inputs before using them in database queries.
* Use prepared statements to prevent SQL injection.
* Migrate away from deprecated `mysql_*` functions to MySQLi or PDO.