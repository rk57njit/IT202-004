<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Shop Project</td></tr>
<tr><td> <em>Student: </em> Rajiv Kumar(rk57)</td></tr>
<tr><td> <em>Generated: </em> 5/11/2022 5:31:15 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-4-shop-project/grade/rk57" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167945101-7acf10f1-70c2-4f01-a706-e03b6810da89.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows table with new visibility column<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167945187-663c1655-2ccd-4cb5-9411-d5c046033350.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows profile edit view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167945699-bb0316ca-18e9-4dce-8d57-33161be70d61.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the users with public visibility there emails<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/42">https://github.com/rk57njit/IT202-004/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-prod.herokuapp.com/Project/showUsers.php">https://rk57-prod.herokuapp.com/Project/showUsers.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>This first queries the Users database to see if the users visibility is<br>set to 1 or 0. 1 would mean they want it visible to<br>others. Then through a for each I show all the users with no<br>visibility and then if they have visibility it shows there email.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to rate a product they purchased </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Ratings table with some data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167949131-c77e5947-e76d-4a75-8a1c-422f7686a621.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows rating table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Product Details page with comments/ratings and the form to add another and the average rating</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167949624-7f5b3e48-4f90-4c63-98cc-85c0a2e5e5b1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows rating on game<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of the error message for a user trying to rate/comment that hasn't purchased the product</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167949624-7f5b3e48-4f90-4c63-98cc-85c0a2e5e5b1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows error<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/41">https://github.com/rk57njit/IT202-004/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to a product details page with ratings/comments</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-dev.herokuapp.com/Project/product_details.php">https://rk57-dev.herokuapp.com/Project/product_details.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic being adding comment/rating and validations</td></tr>
<tr><td> <em>Response:</em> <p>I query the database to make sure the user is able to rate<br>the product by making sure they have bought it. Then we get the<br>data the user enters and post it to the rating table. then every<br>time the product detail page opens it will query the database for the<br>reviews.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167947350-f0cbc785-35d0-454c-9ebc-99eefea71b21.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filtered by date<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/42">https://github.com/rk57njit/IT202-004/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-dev.herokuapp.com/Project/userHistory.php">https://rk57-dev.herokuapp.com/Project/userHistory.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied (ensure the calculated total price is clearly visible)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167948075-a126752e-2591-45fd-b1ed-7ffb1bb5be06.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the cost from lowest to highest<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/45">https://github.com/rk57njit/IT202-004/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the store owner's purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-prod.herokuapp.com/Project/admin/all_orders.php">https://rk57-prod.herokuapp.com/Project/admin/all_orders.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the total price is calculated based on the filtered/paginated results</td></tr>
<tr><td> <em>Response:</em> <p>The total price is achieved by adding all the orders prices up and<br>then displaying it to the user.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to Shop and any other product lists not covered </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot(s) of the newly paginated pages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167948376-c5b41e6c-779a-4a5e-b126-ec68a4fc9d7d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows pagination on shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/47">https://github.com/rk57njit/IT202-004/pull/47</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related pages</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-prod.herokuapp.com/Project/shop.php">https://rk57-prod.herokuapp.com/Project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Store Owner will be able to see all products out of stock </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the out of stock results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167948590-b6fcbc14-3bec-4962-809e-18be1df535c7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows admin being able to see out of stock item<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/47">https://github.com/rk57njit/IT202-004/pull/47</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-dev.herokuapp.com/Project/admin/items.php">https://rk57-dev.herokuapp.com/Project/admin/items.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain your approach to this view</td></tr>
<tr><td> <em>Response:</em> <p>This view is done by the going on the admin list items view.<br>This page will still show the admin even if the item is out<br>of stock. This is only for the user though.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User can sort products by average rating on the shop page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing the sort in effect</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167949067-b133aba5-6d03-448a-bc3c-a1b2b1ca81a6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows how average rating sort<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Products table (or your implementation/approach to average rating)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167949131-c77e5947-e76d-4a75-8a1c-422f7686a621.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows product table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/49">https://github.com/rk57njit/IT202-004/pull/49</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rk57-prod.herokuapp.com/Project/shop.php?name=&col=avg_rating&order=asc">https://rk57-prod.herokuapp.com/Project/shop.php?name=&col=avg_rating&order=asc</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you implemented the average rating recording logic and how it applies to this sort on sho</td></tr>
<tr><td> <em>Response:</em> <p>I used pagination to achieving sorting by average rating. This pagination was used<br>out of the presentations you had in class.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167950762-5bbb5688-2b0c-4d3b-b5c0-e2fbdef6310b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows proposal md file<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/167951179-8af56011-af7a-424d-86f5-a5baff7fc879.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows project board with issues completed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-4-shop-project/grade/rk57" target="_blank">Grading</a></td></tr></table>