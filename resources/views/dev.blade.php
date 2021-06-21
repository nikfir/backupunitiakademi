<x-app-layout>
    <div class="grid grid-cols-3 gap-4">
        </div>
        <div class="w-full h-48 bg-white dark:bg-subnav-d rounded-md">
            <img id="output"/>
            <input type="file" id="image" name="photos" onchange="loadFile(event)">
        </div>

    </div>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
</x-app-layout>
