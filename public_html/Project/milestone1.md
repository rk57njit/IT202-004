<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Rajiv Kumar(rk57)</td></tr>
<tr><td> <em>Generated: </em> 4/3/2022 12:46:40 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone1-deliverable/grade/rk57" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161435248-318699e6-2660-4211-866a-7f656b383d48.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of register page shows email, username, password, and confirmation of password<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161435321-724f6a75-60fb-495f-988d-da0ff6e39bfb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows my table in Vs code with the only user I&#39;ve registers which<br>is my student email<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/33">https://github.com/rk57njit/IT202-004/pull/33</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>This uses validate function which makes sure certain things are there before it<br>goes through for example the password needs to be atleast 8 characters and<br>the email is actually an email by making sure it has an @.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161435607-f4703cb4-a831-4b63-b63e-1825685a43e1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the login page where the user can enter there username or email<br>and password to login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161435569-ff570fa5-f65e-42ea-89f8-fca3d7bf0311.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows me logged in to my account and it saying welcome Rk57.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/33">https://github.com/rk57njit/IT202-004/pull/33</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>This page  uses multiple if statements which make sure the user is<br>entering the right thing to let them login in. It validates the email<br>and makes sure it is vaild and has an @. It validates the<br>password by checking the database and making sure it matches with what the<br>user entered if it doesn&#39;t it makes them reenter it. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161435786-1da5ab30-9dca-4742-88b8-c7ea2f904a3f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the logout button where once you click you will be logged out.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161435904-83d3d24f-2d79-46d6-8183-d9ec91d21a8a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows you cannot enter home if you are not logged in.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/33">https://github.com/rk57njit/IT202-004/pull/33</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>This uses session start and session reset and forces the user to login.php<br>if they are not logged in. It makes sure they are logged in<br>before they can&#39;t access anything. It also prints a flash messages saying successfully<br>logged out.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161435904-83d3d24f-2d79-46d6-8183-d9ec91d21a8a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user cannot enter home if they are not logged in. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161435904-83d3d24f-2d79-46d6-8183-d9ec91d21a8a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cannot access assign_roles.php because user is not admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161437466-ce61d6c0-ddd9-4dce-a1ed-43b4bafc256d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows roles of admin <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161437492-08b27f11-411d-42f0-8b3d-0cb835ebc54b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows admin role for my main user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/33">https://github.com/rk57njit/IT202-004/pull/33</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>This make sure a user is logged in before they have access to<br>home or anything. Home.php uses an if statement which is login true if<br>its true then it lets them log in. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For role protected pages we used an if statement that always the admin<br>to access pages that they couldn&#39;t with out admin<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161437621-522e52a1-1cde-4dd5-bba1-70a7db37be79.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the website with a pink background and everything is styled. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/33">https://github.com/rk57njit/IT202-004/pull/33</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>For this we used styles.css. This is where we applied colors to the<br>background and applied borders aswell. The default we have right now is is<br>hot pink which is all throughout the website.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161437774-01d8c607-ae5c-451c-9fb2-56405791f4f6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows when it is not an email it gives the user a<br>message saying please enter an email.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/33">https://github.com/rk57njit/IT202-004/pull/33</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>We used flash messages to make user friendly messages. For example if the<br>password field is empty we used flash flash(&quot;password must not be empty&quot;); this<br>makes it so the browser tell the user that the password field is<br>empty<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161437953-a51cfdb2-cbcc-45e3-ab55-1d61e59033bc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the profile page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/33">https://github.com/rk57njit/IT202-004/pull/33</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>This code brings the user to the profile php which lets them look<br>at it. It makes sure they are logged in. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://github.com/rk57njit/IT202-004/pull/33"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows that the user is able to edit the profile. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161438088-e706d7fb-e67e-42a4-a547-a606773b3872.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows test which I just made<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161438140-0373dfb3-5dd4-4dac-af02-cf167754cd6b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I changed the user name to testing<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rk57njit/IT202-004/pull/33">https://github.com/rk57njit/IT202-004/pull/33</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>This also uses validate to make sure all the parameters good. Makes sure<br>if they are changing the password it is the right amount of character.Also<br>makes sure the email is good aswell.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161438593-3626fa07-36dc-4dac-bc71-74983b2751fc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>For some reason I cannot get the check marks.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98345207/161438278-dbdbe1c9-54b4-4392-96b1-ea95a2bb9707.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the project board. No issues yet.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone1-deliverable/grade/rk57" target="_blank">Grading</a></td></tr></table>