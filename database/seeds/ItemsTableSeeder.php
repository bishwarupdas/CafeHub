<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allItems = array(
            array("1","Katti Roll","Veg. Roll","0","50","0"),
            array("1","Katti Roll","Single Egg Roll","0","50","0"),
            array("1","Katti Roll","Panner Roll","0","60","0"),
            array("1","Katti Roll","Double Egg Roll","0","60","0"),
            array("1","Katti Roll","Single Egg Chicken Rol","0","70","0"),
            array("1","Katti Roll","Double Egg Single Chicken Roll","0","80","0"),
            array("1","Katti Roll","Single Egg Double Chicken Roll","0","80","0"),
            array("1","Katti Roll","Double Egg Double Chicken Roll","0","90","0"),
            array("1","Katti Roll","Single Chicken Keema Roll","0","110","0"),
            array("1","Katti Roll","Double Chicken Keema Roll","0","120","0"),
            array("1","Katti Roll","Egg Chicken Keema Roll","0","120","0"),
            array("1","Katti Roll","Extra Mayonnaise","1","15","0"),
            array("1","Katti Roll","Extra Cheese","1","15","0"),
            array("2","Beverages","Lemmon Soda (Sweet & Salt/Jal Jeer)","0","30","0"),
            array("2","Beverages","Black Coffee","0","40","0"),
            array("2","Beverages","Tea","0","40","0"),
            array("2","Beverages","Espresso","0","50","0"),
            array("2","Beverages","Hot Coffee","0","50","0"),
            array("2","Beverages","Cold Coffee","0","60","0"),
            array("2","Beverages","Cappuccino","0","70","0"),
            array("2","Beverages","Coffee Latte","0","70","0"),
            array("2","Beverages","Vanilla Cold Coffee","0","70","0"),
            array("2","Beverages","Strawberry Sparklers","0","70","0"),
            array("2","Beverages","Green Apple Sparklers","0","70","0"),
            array("2","Beverages","Pineapple Sparklers","0","70","0"),
            array("2","Beverages","Guava Sparklers","0","70","0"),
            array("2","Beverages","Litchi Sparklers","0","70","0"),
            array("2","Beverages","Orange Sparklers","0","70","0"),
            array("2","Beverages","Mango Sparklers","0","70","0"),
            array("2","Beverages","Blueberry Sparklers","0","80","0"),
            array("2","Beverages","Kiwi Sparklers","0","80","0"),
            array("2","Beverages","Cold Frapp̩ (Chocolate Cold Coffee)","0","120","0"),
            array("3","Starters","Gobi Manchurian","0","80","0"),
            array("3","Starters","Babycorn Manchurian","0","100","0"),
            array("3","Starters","Mushroom Manchurian","0","120","0"),
            array("3","Starters","Paneer Manchurian","0","120","0"),
            array("3","Starters","Chicken Manchurian","0","130","0"),
            array("3","Starters","Chicken 65","0","140","0"),
            array("3","Starters","Dragon Chicken","0","150","0"),
            array("3","Starters","Baby Corn Chili Dry","0","100","0"),
            array("3","Starters","Crispy Chili Baby Corn","0","120","0"),
            array("3","Starters","Paneer Chili (Dry)","0","130","0"),
            array("3","Starters","Panner Chili (Gravy)","0","130","0"),
            array("3","Starters","Garlic Chicken Fry (Dry)","0","130","0"),
            array("3","Starters","Crispy Chicken","0","160","0"),
            array("3","Starters","Garlic Chicken (Szechuan)","0","180","0"),
            array("4","Soup","Chicken Soup","0","60","0"),
            array("4","Soup","Chicken Spicy Soup","0","60","0"),
            array("4","Soup","Sweet Corn Soup","0","90","0"),
            array("5","Chowmein","Veg. Chowmein","0","80","0"),
            array("5","Chowmein","Egg Chowmein","0","80","0"),
            array("5","Chowmein","Mushroom Chowmein","0","100","0"),
            array("5","Chowmein","Paneer Chowmein","0","100","0"),
            array("5","Chowmein","Chicken Chowmein","0","100","0"),
            array("5","Chowmein","Egg Chicken Chowmein","0","110","0"),
            array("5","Chowmein","Chicken Mushroom Chowmein","0","130","0"),
            array("6","Rice","Veg. Fried Rice","0","80","0"),
            array("6","Rice","Egg Fried Rice","0","80","0"),
            array("6","Rice","Chicken Fried Rice","0","90","0"),
            array("6","Rice","Egg Chicken Fried Rice","0","100","0"),
            array("6","Rice","Paneer Fried Rice","0","110","0"),
            array("6","Rice","Mushroom Fried Rice","0","110","0"),
            array("6","Rice","Chicken Mushroom Fried Rice","0","120","0"),
            array("7","Shawarma","Shawarma Roll Fulka","0","80","0"),
            array("7","Shawarma","Shawarma Burger","0","80","0"),
            array("7","Shawarma","Shawarma Whole Burger","0","100","0"),
            array("7","Shawarma","Whole Chicken Shawarma Roll Fulka","0","100","0"),
            array("7","Shawarma","Shawarma Roll Kubooj","0","100","0"),
            array("7","Shawarma","Whole Shawarma Roll Kubooj","0","130","0"),
            array("7","Shawarma","Extra Spicy","1","10","0"),
            array("8","Grill","Half Grill","0","180","0"),
            array("8","Grill","Full Grill","0","300","0"),
            array("8","Grill","Smoky Half Grill","0","200","0"),
            array("8","Grill","Smoky Full Grill","0","350","0"),
            array("8","Grill","Extra Salad","1","20","0"),
            array("8","Grill","Extra Mayonnaise","1","20","0"),
            array("9","Biriyani","Chicken Biriyani Half","0","100","0"),
            array("9","Biriyani","Chicken Biriyani Full","0","180","0"),
            array("10","Luchi","Aloor Dum","0","120","0"),
            array("10","Luchi","Kosha Mangsho","0","160","0")
        );

        foreach ($allItems as $item) {
            DB::table('items')->insert([
                'category_id' => $item[0],
                'name' => $item[2],
                'is_addon' => $item[3],
                'price' => $item[4],
                'discount_percentage' => $item[5]
            ]);
        }

    }
}
