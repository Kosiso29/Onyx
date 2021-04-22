<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json Placeholder Display</title>
</head>
<body>
    <h1 id="header">JSON PLACEHOLDER</h1>
    <div id="DIV1"></div>
    <table>
        <thead>
            <th>User Id</th>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
        </thead>
        <tbody></tbody>
    </table>
    <form action="connectDB.php" method="get"></form>
    <script>
        fetch('https://jsonplaceholder.typicode.com/posts')
            .then(res => res.json())
            .then(data => {
                for (let i = 0; i<10; i++) {

                    document.querySelector("form").innerHTML += `
                        <input type="text" name="userId${i}" value="${data[i]["userId"]}">
                        <input type="text" name="id${i}" value="${data[i]["id"]}">
                        <input type="text" name="title${i}" value="${data[i]["title"]}">
                        <input type="text" name="body${i}" value="${data[i]["body"]}">
                        <br>
                    `

                    // document.querySelector("tbody").innerHTML += `
                    //     <td>${data[i]["userId"]}</td>
                    //     <td>${data[i]["id"]}</td>
                    //     <td>${data[i]["title"]}</td>
                    //     <td>${data[i]["body"]}</td>
                    // `
                }
                document.querySelector("form").innerHTML += `
                        <input type="submit" name="submit" value="Submit">
                        <br>
                    `
            })
    </script>
</body>
</html>