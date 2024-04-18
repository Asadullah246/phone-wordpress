<?php
// Check if we are on a single product page
if ( is_product() ) {
    global $product;

    // Check if the product object exists
    if ( ! empty( $product ) ) {
        // Retrieve all product attributes
        $attributes = $product->get_attributes();

        // Check if attributes exist
        if ( ! empty( $attributes ) ) {
            ?>

            <div class="custom-phone-info">
                <h2>Phone Info</h2>
                <ul>
                    <?php
                    // Loop through each attribute
                    foreach ( $attributes as $attribute ) {
                        // Retrieve the attribute name
                        $attribute_name = $attribute->get_name();

                        // Retrieve the attribute value
                        $attribute_value = $product->get_attribute( $attribute_name );

                        // Display the attribute name and value
                        echo '<li><strong>' . $attribute_name . ':</strong> ' . $attribute_value . '</li>';
                    }
                    ?>
                </ul>
            </div>

            <?php
        } else {
            echo '<p>No attributes found for this product.</p>'; 
        }
    }
}
?>

