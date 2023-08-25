<div>
    {{-- Stop trying to control. --}}
    <h1 class=" text-3xl">Profile</h1>

    <div class=" mt-6">
        <button class=" px-4 py-2 rounded bg-blue-500 hover:bg-blue-700 transition-all text-white" id="profile-btn">Generate</button>
    </div>

    <script>
        function generateRandomString()
        {
            // Update DOM Element
            if(document.querySelector('[data-attr="sample"]')){
                console.log('Random String function (generateRandomString) are called');

                const randomStrings = Array.from({ length: 12 }, () =>
                    Math.random().toString(36).substring(2, 14)
                );

                const randomIndex = Math.floor(Math.random() * randomStrings.length);
                const randomString = randomStrings[randomIndex];
                document.querySelector('[data-attr="sample"]').innerHTML = randomString;
            }
        }

        document.addEventListener('livewire:navigated', () => {
            // Generate Random String on Init
            generateRandomString();
        });

        // Add button Event
        if(document.getElementById('profile-btn')){
            document.getElementById('profile-btn').addEventListener('click', () => {
                generateRandomString();
            });
        }
    </script>
</div>
