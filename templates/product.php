<section>

    <div class="container mx-auto p-4">

        <img class="h-96 rounded-md w-full object-cover my-2" src="<?php echo $product['image']; ?>"
            alt="Product Demo Image">


        <a href="#contact"><button class="rounded-md my-4 mx-auto bg-violet-800 font-semibold text-white px-4 py-2">View
                Enquiry
                Form</button></a>

        <div>
            <h1 class="text-3xl font-bold text-black">
                <?php echo $product['title']; ?>
            </h1>
            <!-- <p class="text-gray-500 text-xl"> -->
            <?php echo $product['description']; ?>


            <!-- </p> -->
        </div>





</section>