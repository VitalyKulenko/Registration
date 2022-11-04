<?php require('partials/head.php'); ?>

<form hx-post="" hx-encoding="multipart/form-data" hx-swap="none" @submit="step2 = ! step2, step3 = ! step3" x-data="{step1: true, step2: false, step3: false, title: ''}" class="relative container bg-white px-20 py-10 rounded-lg my-5" x-validate>
    <div x-show="step1">
        <div class="absolute top-6 left-8 text-gray-400 text-2xl font-normal">
            <p>Step 1</p>
        </div>
        <div class="flex flex-wrap justify-end">
            <h1 class="flex text-4xl font-bold mb-6 basis-full justify-center">Registration</h1>
            <div class="flex basis-1/2 flex-wrap my-auto mt-0">
                <input name="firstName" type="text" placeholder="First name" class="border-2 rounded-md p-1 basis-full my-1" required />
                <input name="lastName" type="text" placeholder="Last name" class="border-2 rounded-md p-1 basis-full my-1" required />
                <div class="w-full" x-data>
                    <input name="phone" type="text" placeholder="+99 (999) 999-9999" x-mask="+99 (999) 999-9999" class="border-2 rounded-md p-1 basis-full w-full my-1" required />
                </div>
                <input name="email" type="email" placeholder="E-mail" class="border-2 rounded-md p-1 basis-full my-1" required />
            </div>
            <div class="flex basis-1/2 flex-wrap pl-16">
                <div class="basis-1/2 my-2">
                    <p>Load your photo:</p>
                    <input name="photo" type="file" required>  
                </div>
                <div class="basis-1/2">
                    <p>Choose your country:</p>
                    <select name="country" class="border-2 rounded-md p-1">
                        <option>United Kingdom</option>
                        <option>Germany</option>
                        <option>Poland</option>
                        <option>USA</option>
                        <option>China</option>
                        <option>Japan</option>
                        <option>Ukraine</option>
                    </select>
                </div>
            </div>
            <div class="flex mt-1">
                <button @click="step1 = ! step1, step2 = ! step2" type="button" class="bg-red rounded-md py-2 px-8 my-auto text-white hover:bg-darkRed hover:shadow-lg hover:shadow-red/50">Next</button>
            </div>
        </div>
    </div>

    <div x-show="step2">
        <div class="absolute top-6 left-8 text-gray-400 text-2xl font-normal">
            <p>Step 2</p>
        </div>
        <div class="flex flex-wrap">
            <h1 class="flex text-4xl font-bold mb-6 basis-full justify-center">Registration</h1>
            <input name="title" type="text" x-model="title" placeholder="Title of the speech topic" class="border-2 rounded-md p-1 basis-full my-1" required></input>
            <textarea name="description" type="text" placeholder="Brief description of the performance" maxlength="1000" class="border-2 rounded-md p-1 basis-full my-1" rows="4" required></textarea>
            <div class="flex basis-full">
                <div class="flex flex-wrap basis-1/4">
                    <p>Performance date:</p>
                    <input name="date" class="border-2 rounded-md p-1 basis-full my-1" type="date" min="<?php echo date('Y-m-d'); ?>" required>
                </div>
                <div class="flex justify-end basis-3/4 mt-3">
                    <button @click="step1 = ! step1, step2 = ! step2" type="button" class="bg-red rounded-md py-2 px-8 my-auto text-white hover:bg-darkRed hover:shadow-lg hover:shadow-red/50">Back</button>
                    <button type="submit" class="bg-red rounded-md py-2 px-8 my-auto ml-5 text-white hover:bg-darkRed hover:shadow-lg hover:shadow-red/50">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div x-show="step3">
        <div class="absolute top-6 left-8 text-gray-400 text-2xl font-normal">
            <p>Step 3</p>
        </div>
        <h1 class="flex text-4xl font-bold mb-6 basis-full justify-center">Congratulations!</h1>
        <div class="flex text-3xl mb-6 basis-full justify-center">You perform with the theme «<span x-text="title"></span>»!</div>
        <p class="flex mb-2 basis-full justify-center">Share on social networks:</p>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-635bb99d96693d56"></script>
        <div class="flex basis-full justify-center addthis_inline_share_toolbox"></div>
    </div>
    
</form>

<?php require('partials/footer.php'); ?>
