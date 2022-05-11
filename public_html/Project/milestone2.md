<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Rajiv Kumar(rk57)</td></tr>
<tr><td> <em>Generated: </em> 5/11/2022 3:55:40 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-2-shop-project/grade/rk57" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone2 branch </li>
<li>Create a new markdown file called milestone2.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone2.md link (from Milestone2) into the proposal.md file under each milestone2 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone2.md</li>
<li>Add/commit/push the changes to Milestone2</li>
<li>PR Milestone2 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 3</li>
<li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on github and everywhere else.
Images are only accepted from dev or prod, not local host.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167928004-cf66c1a6-2354-496b-bd4f-18e87754f91d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows remotely since I could not deploy that an admin can add products<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/163851090-8951b1dc-a800-403d-a3b2-d27e8889e1b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows table from visual studio<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>So for creating a product I used an api which is the one<br>you made. It first takes my table and then checks to see if<br>I have the role of an admin. Then it uses the get columns<br>functions which helps it get the data it needs from the table. Then<br>It has the form where it has name, price, description, etc. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/35">https://github.com/rk57njit/IT202-004/pull/35</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-prod.herokuapp.com/Project/admin/add_item.php">https://rk57-prod.herokuapp.com/Project/admin/add_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167928944-9169c977-8a8f-46ba-b90c-7058f68cc4f2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows my test user seeing the items<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167929063-ca5c0a39-edc3-469b-83cf-cc14b936fb04.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the price from highest to lowest<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code (ensure ucid and date is shown)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/163852552-529dda52-7345-41c2-be19-dffe609ca988.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows pagination code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>For sorting I used pagination just how we learned about it in class.<br>Pagination sorts the query it gets from the database. Then we applied pagination<br>to the shop.php file where it takes 3 variables. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/36">https://github.com/rk57njit/IT202-004/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-prod.herokuapp.com/Project/shop.php">https://rk57-prod.herokuapp.com/Project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167929270-2ce0643f-6e12-4b00-9a58-5da926c29a2e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>picture of list product page visible to admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>The results are shown because I am using list items.php. This is first<br>querying the database Products which is where all my items are stored. It<br>is thinning counting how many results are there and keeping track of them.Then<br>I used a loop to list the items only to the admin.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/40">https://github.com/rk57njit/IT202-004/pull/40</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-prod.herokuapp.com/Project/admin/items.php">https://rk57-prod.herokuapp.com/Project/admin/items.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a sceenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167929483-60197ce8-22ca-45ef-aa95-d0ade22b7e78.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the admin can edit the product on the shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a sceenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167929603-bf8df644-87bb-48f9-a456-3b416c8092a4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the edit button visible on product details page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a sceenshot showing the edit button visible to the Admin on the Admin Product List Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167929270-2ce0643f-6e12-4b00-9a58-5da926c29a2e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows edit button on admin list page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167929898-d7da616e-eb33-4e03-99a6-eba225142760.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167929989-ca05832c-6b2f-40ce-8ab0-d5b6894f7ba6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows after with me changing the price to 80 for black ops 1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>I first verified on all the pages if the user is an admin<br>or shop owner. Then I query the database to show all the items<br>listed. Then if the admin decides to change anything on the item it<br>will send that data to the database which will update it on all<br>the pages. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/42">https://github.com/rk57njit/IT202-004/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-prod.herokuapp.com/Project/admin/items.php">https://rk57-prod.herokuapp.com/Project/admin/items.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167931003-1eea4d7d-973a-4b9e-91df-4894e1d23b3c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows clickable link for product detail<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167931100-cded27a9-18a2-4658-8d61-6acf21d9ffe9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows product detail page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>For this I query the database for my Product database. This will get<br>all the data I need to show the user. Then I created a<br>form which shows all the data I queried from the database<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/43">https://github.com/rk57njit/IT202-004/pull/43</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-prod.herokuapp.com/Project/product_details.php">https://rk57-prod.herokuapp.com/Project/product_details.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167931766-e6501f10-b58c-41fb-b6b7-ec253f02eecd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows me adding something to cart and getting success message.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167931838-6a4151c8-da91-409f-a72c-834b46ba1393.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows error message when not logged in.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/163853359-bd8732ae-17f2-4bd9-8617-92beeb9c64d2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows database from vs code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>For my cart I have 1 cart per user. If they log out<br>and have something in there cart once they log back in it will<br>still be there. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>For add to cart I used an api like you showed us in<br>class. This api allows to user to add something to the cart and<br>sends it to the database via a post request. It either says success<br>or you much be logged in if it does not go through.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/37">https://github.com/rk57njit/IT202-004/pull/37</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View (show subtotal, total, and the link to Product Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167931961-c9d54428-7a39-4de5-805c-8f5915908c38.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows products added to cart with subtotal and total.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>For this I used the get cart api like you showed in class.<br>This queries the database for the cart. Then we call this api in<br>the shop.php file where it shows the user the cart with subtotal and<br>total. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/38">https://github.com/rk57njit/IT202-004/pull/38</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-prod.herokuapp.com/Project/cart.php">https://rk57-prod.herokuapp.com/Project/cart.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167931961-c9d54428-7a39-4de5-805c-8f5915908c38.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167932135-50ca69e8-037d-4fec-a845-bdb788b22844.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows after I added another black ops 1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167932135-50ca69e8-037d-4fec-a845-bdb788b22844.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167932358-a2925323-01ad-40ff-bae5-84b2c9d3c16e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I deleted the whole cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167932732-57cbceb3-65c9-4397-b9db-c8ded5f0b71f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows that it tells the user we dont have enough<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>I use an If statement where if the quanity is below 0 or<br>0 it will not let it go through.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/34">https://github.com/rk57njit/IT202-004/pull/34</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167933059-e68872ae-9a3a-4264-b5ee-d52363ecdb03.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167933129-ecac6918-eedb-4fac-af75-755ae082f9a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167933129-ecac6918-eedb-4fac-af75-755ae082f9a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167933242-b391fb63-49f0-4df4-9ec2-77f08634428d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows cart cleared<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>The delete process works with an api like you showed us in class.<br>This queries the database and send the post request to delete the item<br>from the cart. We call this in the shop.php file. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <em>Response:</em> <p><a href="https://github.com/rk57njit/IT202-004/pull/40">https://github.com/rk57njit/IT202-004/pull/40</a><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167934266-2a9192c3-19af-4aae-aa06-48d426b9f526.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows proposal md<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167934575-cfc63c5f-ef71-47b4-bd58-148d7990d5f5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows project board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-2-shop-project/grade/rk57" target="_blank">Grading</a></td></tr></table>