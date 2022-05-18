<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <?php 
        include 'Staff.php';
        include 'WageCalculatorInterface.php';
        include 'Employee.php';
        include 'Manager.php';

        $employee1 = new Employee('James', 'IT', 12);
        $employee2 = new Employee('Jane', 'Sale', 8);
        $employee3 = new Employee('John', 'Support', 3);
        $employees = [$employee1, $employee2, $employee3];

        $manager1 = new Manager('Mosh', 'Techlead', 1500);
        $manager2 = new Manager('Tim', 'CTO', 3000);
        $manager3 = new Manager('Steve', 'CEO', 5000);
        $managers = [$manager1, $manager2, $manager3];
    ?>

    <h1>PHP OOP</h1>

    <h3>List of Managers!</h3>
    <table>
        <thead>
            <tr>
                <td>Manager's name</td>
                <td>Position</td>
                <td>Wage (USD)</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($managers as $manager) {
            echo "<tr>";
            echo "<td>" . $manager->getName() . "</td>";
            echo "<td>" . $manager->getPosition() . "</td>";
            echo "<td>" . $manager->calculateWage() . "</td>";
            echo "</tr>";
            } ?>
        </tbody>
    </table>

    <h3>List of Employees!</h3>
    <table>
        <thead>
            <tr>
                <td>Employee's name</td>
                <td>Position</td>
                <td>Wage (USD)</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($employees as $employee) {
            echo "<tr>";
            echo "<td>" . $employee->getName() . "</td>";
            echo "<td>" . $employee->getPosition() . "</td>";
            echo "<td>" . $employee->calculateWage() . "</td>";
            echo "</tr>";
            } ?>
        </tbody>
    </table>

</body>
</html>