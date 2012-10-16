Lemonstand-Extensions
==================
 
Adds code extensions to the Lemonstand Platform

## Installation
1. Navigate to the `/modules` directory of your Lemonstand project
1. Clone the repo into extensions320ny: `git clone git@github.com:320ny/Lemonstand-Extensions.git extensions320ny`
1. Logout and then back into the Lemonstand admin site
1. Done!

## Usage
The following methods are now avilable for you to use. (Examples are in Twig)

### list_unique_product_option_values($name)

This method adds the ability to collect all unique product options values, of a given option type, for only the products in a specific category.
To use create an instance of the class by passing a known category id. 

```smarty
{% set my_category = method('Extensions320ny_Shop_Category', 'create') %}
```
Then apply the method passing in a specific option type.
```smarty
{% set option_values = my_category.find_by_id(current_category.id).list_unique_product_option_values("Color") %}
```
You now have an array of option values to iterate through.


