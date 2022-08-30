## Kenya Counties Data

This module introduces Regions, Counties SubCounties and Wards into your project. It adds the necessary models, controllers, services and migrations for it to work. As this solution seeks to be as unobtrusive as possible, all the data has been handled using seeds. Therefore, you need to run 
# php artisan migrate 
and 
## php artisan db:seed.

This data is broken down into:
1. Regions
2. Counties 
3. SubCounties
4. Wards


## The Goal
The goal for this package is to have all subdivision data for all Afrikan Countries. Whenever you are building an application that should make use of decentralized units of govt in Kenya and the rest of Afrika, you are forced to manually enter all those records over and over. This, right here, is a solution for that. 

## What's Covered:
Kenya's units of Gov't:
(Regions are for classification, but are no longer used for administration in  Kenya.)
1. Counties
2. Sub Counties/Constituencies
3. Wards

TODO: Wards in every Sub County.
