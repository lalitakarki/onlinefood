<?php
$servername = "localhost";
$username = "root";
$password = "";
<<<<<<< HEAD
$db = "stocktable";
// Create connection
$GLOBALS['conn'] = new mysqli($servername, $username, $password, $db);
=======
$db = "testDatabase";

// Create connection
$GLOBALS['conn'] = new mysqli($servername, $username, $password, $db);

>>>>>>> a930afabc7a7b054a54ecdf9f59fdf3c654824d6
// Check connection
if ($GLOBALS['conn']->connect_error)
{
    die("Connection failed: " . $GLOBALS['conn']->connect_error);
}
<<<<<<< HEAD
//echo "Connected successfully";
=======
echo "Connected successfully";

>>>>>>> a930afabc7a7b054a54ecdf9f59fdf3c654824d6
function insertRecord()
{
    $qry = "insert into users(email,password,firstName,lastname) values('sonusanwal65@gmail.com','abcd1234','Suraj','Sanwal')";
    if ($GLOBALS['conn']->query($qry))
    {
        echo "record inserted sucessfully";
    }
    else
    {
        die("insert failed: " . $GLOBALS['conn']->error);
    }
}
<<<<<<< HEAD
=======

>>>>>>> a930afabc7a7b054a54ecdf9f59fdf3c654824d6
/**
 * function used for excute sql queries.
 */
function excuteQuery($qry)
{
    if ($GLOBALS['conn']->query($qry))
    {
        return true;
    }
    else
    {
        return false;
    }
}
<<<<<<< HEAD
/**
 * function used to return response from sql query
 */
=======

/**
 * function used to return response from sql query
 */

>>>>>>> a930afabc7a7b054a54ecdf9f59fdf3c654824d6
function getQueryResponse($qry)
{
    $result = $GLOBALS['conn']->query($qry);
    $i = 0;
    $res = [];
    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $res[$i] = $row;
            $i++;
        }
    }
    return $res;
}
<<<<<<< HEAD
=======


>>>>>>> a930afabc7a7b054a54ecdf9f59fdf3c654824d6
/**
 * select a all fields from table with out condition
 * @param string $table is a string with table name ex "user"
 */
function selectAll($table)
{
    $qry = "select * from $table";
    return getQueryResponse($qry);
}
<<<<<<< HEAD
=======


>>>>>>> a930afabc7a7b054a54ecdf9f59fdf3c654824d6
/**
 * select a all fields from table where cond exists
 * @param string $table is a string with table name ex "user"
 * @param string $con is condition to pass 
 */
function selectAllWhere($table, $cond)
{
    $qry = "select * from $table where $cond";
    return getQueryResponse($qry);
}
<<<<<<< HEAD
=======


>>>>>>> a930afabc7a7b054a54ecdf9f59fdf3c654824d6
/**
 * select a single field from table
 * @param array $field is a field Name.
 * @param string $table is a string with table name ex "user"
 * @param string $con is condition to pass 
 */
function selectFieldWhere($table, $field, $cond)
{
    $qry = "select $field from $table where $cond";
    return getQueryResponse($qry);
}
<<<<<<< HEAD
=======


>>>>>>> a930afabc7a7b054a54ecdf9f59fdf3c654824d6
/**
 * select required fields from table 
 * @param array $fields is an array of diffent field Names. example ['abc','bac']
 * @param string $table is a string with table name ex "user"
 * @param string $con is condition to pass 
 */
function selectFieldsWhere($table, $fields, $con)
{
    $qry = "select " . implode(',', $fields) . " from $table where $con";
    //implode convert an array to string with patterns provided ex: ['email','name']==> (email,name)
    return getQueryResponse($qry);
}
<<<<<<< HEAD
=======


>>>>>>> a930afabc7a7b054a54ecdf9f59fdf3c654824d6
/**
 * insert into is a common query builder for insert data into a table
 * @param array $value is an array of diffent values. example ['abc','bac']
 * @param string $table is a string with table name ex "user"
 */
function insertInto($value = [], $table = "")
{
    echo $qry = "insert into $table values(" . implode(',', $value) . ")";
    return excuteQuery($qry);
}
<<<<<<< HEAD
=======

>>>>>>> a930afabc7a7b054a54ecdf9f59fdf3c654824d6
/**
 * insert into is a common query builder for insert data into specific fields in a table
 * @param array $fields is an array of diffent field name. example ['email','password']
 * @param array $values is an array of diffent values. example ['abc','bac']
 * @param string $table is a string with table name ex "user"
 */
function insertIntoFields($fields, $values, $table)
{
    echo $qry = "insert into(" . implode(',', $fields) . ") $table values(" . implode(',', $values) . ")";
    return excuteQuery($qry);
}
<<<<<<< HEAD
=======


>>>>>>> a930afabc7a7b054a54ecdf9f59fdf3c654824d6
/**
 * insert into is a common query builder for insert data into specific fields in a table
 * @param string $field is a string of field name. example 'email'
 * @param array $value is a string of field values. example 'abc@ac.com'
 * @param string $table is a string with table name ex "user"
 * @param string $cond is an conditio which lie for where ex: email==="value"
 */
function updateField($field, $table, $value, $cond)
{
    echo $sql = "update $table set " . $field . ' = ' . $value . " where $cond";
    return excuteQuery($qry);
}
<<<<<<< HEAD
=======


>>>>>>> a930afabc7a7b054a54ecdf9f59fdf3c654824d6
?>
