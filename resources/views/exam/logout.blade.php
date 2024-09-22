<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exams</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-96 text-center">
        <h2 class="text-2xl font-bold text-center mb-6">Exam</h2>
        <p class="mb-6">Thank you for completing the exam today. Please return and wait for the results.</p>
        <a href="{{route('exam.logout')}}" class=" bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Back</a>
    </div>

</body>
</html>
