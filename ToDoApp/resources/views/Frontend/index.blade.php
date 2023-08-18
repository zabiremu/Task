<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>To Do App</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-sky-500/100">

    <div id="toDoApp" class="h-screen">
        <div class="container mx-auto mt-32">
            <div class="flex justify-center items-center flex-col">
                <div class="toDoForm">
                    <input type="text" class="w-96 py-3 -z-1 rounded-full relative ps-5"
                        placeholder="Wirte Your Note....." id="inputField">
                    <button id="addTask"
                        class="bg-sky-300 px-8 rounded-full text-dark-500 absolute -ms-12 py-3">Add</button>

                </div>
                <div class="mt-12">
                    <ul id="listContainter">
                        @foreach ($toDos as $toDo)
                            <li class="w-96 py-3 -z-1 rounded-full bg-white mt-3 ps-5 relative"> {{ $toDo->note }}
                                <a href="{{route('destroy',$toDo->id)}}"
                                    class="px-8 rounded-full text-dark-500 absolute -ms-12 py-3 right-0 -me-5 -mt-3 delete"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="2.5"
                                        stroke="#F56565" fill="none" class="duration-300 transform transition-all"
                                        style="width: 24px; height: 24px;">
                                        <path d="M8.06 8.06l47.35 47.88M55.94 8.06L8.59 55.94"></path>
                                    </svg></a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        const addTask = $('#addTask')
        const inputField = $('#inputField')
        const listContainter = $('#listContainter')


        $(document).ready(function() {
            addTask.on('click', function() {

                if (inputField.val() !== '') {
                    value = inputField.val()


                    $.ajax({
                        type: 'POST',
                        url: "{{ route('store') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            value: value,
                        },
                        success: function(data) {
                            console.log(data)
                            let id= data.success.id;
                            const li = `
                                <li class="w-96 py-3 -z-1 rounded-full bg-white mt-3 ps-5 relative">${data.success.note}
                                            <a href="/destroy/${id}" type="submit" id="delete" class="px-8 rounded-full text-dark-500 absolute -ms-12 py-3 right-0 -me-5 -mt-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="2.5" stroke="#F56565" fill="none" class="duration-300 transform transition-all" style="width: 24px; height: 24px;"><path d="M8.06 8.06l47.35 47.88M55.94 8.06L8.59 55.94"></path></svg></a>
                                        </li>
                                `;
                            listContainter.append(li)
                        }
                    });
                } else {
                    alert("Please Write Your Note......")
                }

            })
        })
    </script>


</body>

</html>
