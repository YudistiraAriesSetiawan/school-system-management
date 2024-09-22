<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Exams</title>
</head>
<body class="bg-gray-100">

    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
        <h1 class="text-3xl font-bold mb-6 text-center">Exam</h1>

        <form method="GET" action="{{route('exam.submit')}}">
            @csrf
            <div class="space-y-4">

                @foreach ($exams as $exam )
                    @foreach ( $exam->questions as $question )
                    <div class="border p-4 rounded-lg shadow-sm">
                        <p class="font-semibold">Question</p>
                        <p class="mb-2">{{$question->question_text}}</p>
                        <div>
                            @foreach ( $question->answer as $item )
                            <label class="block">
                                <input type="radio" name="question_{{$question->id}}" value="{{$item['poin']}}" class="mr-2"> {{$item['answer']}}
                            </label>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                @endforeach
                <!-- Add more questions here -->

            </div>

            <div class="mt-6 text-center">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Submit Exam</button>
            </div>
        </form>
    </div>

</body>
</html>
