Aaron is playing!!!

Great job Aaron, I plugged my table into the tutor page and i've wired up the site so its more realistic. Also,
I reorganized our files since things started to feel a little chaotic, if we don't like the architecture, i'm
happy to go back upon request. -Ryan

Guide to git (I tried to keep this as simple as possible)
1. If you haven't freshly cloned our repo or know someone has pushed update, be sure to run the folling commands
	-git checkout master
	-git rebase master
This will put your folder up to date with our live version.

2. Work on your files as normal.

3. When finished, run 
	-git add .
This adds all modified files to be committed

4. Run git commit -m "your commit message here, do try to make it informative"

5. Once your changes are complete, run 
	-git push
You will be prompted for your credentials and once you login, the push sould succeed.