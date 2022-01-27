   53  ll
   54  cd Desktop/
   55  ll
   56  cd devops/
   57  ll
   58  rm clovis19
   59  rm clovis19.pem
   60  rm clovis19a.pem 
   61  ll
   62  exit
   63  ll
   64  cd devops/
   65  ll
   66  ll -la
   67  cd ..
   68  cd ..
   69  ll
   70  cd dabac/
   71  ll
   72  cd OneDrive/
   73  ll
   74  cd desktop
   75  ll
   76  ll
   77  cd master/
   78  ll
   79  cd aws/
   80  ll
   81  clear
   82  ll
   83  cd ..
   84  ll
   85  cd ..
   86  cd ..
   87  exit
   88  ssh -i "clovis20.pem" ec2-user@ec2-3-133-86-76.us-east-2.compute.amazonaws.com
   89  ssh -i "clovis20.pem" ec2-user@ec2-3-133-86-76.us-east-2.compute.amazonaws.com
   90  exit
   91  cd a:
   92  cd xampp/htdocs/grand/
   93  ll
   94  cd media/
   95  ll
   96  mv main6 puteffort
   97  cd puteffort/
   98  composer require laravel/ui
   99  npm install bootstrap/
  100  npm install bootstrap/
  101  npm install bootstrap
  102  php artisan ui bootstrap --auth
  103  cd resources/views/
  104  mkdir pages
  105  cd pages/
  106  touch index.blade.php about.blade.php contact.blade.php
  107  cd ..
  108  ll
  109  ls
  110  cd layouts/
  111  ll
  112  ls
  113  touch master.blade.php
  114  ls
  115  cd ..
  116  ll
  117  ls -l
  118  dir
  119  mkdir articles
  120  cd articles/
  121  touch index.blade.php show.blade.php edit.blade.php create.blade.php
  122  ll
  123  ls
  124  ls
  125  cd ..
  126  cd ..
  127  cd ..
  128  php artisan make:model Article -mfcr
  129  code .
  130  ll
  131  php artisan migrate:fresh
  132  php artisan migrate:fresh
  133  php artisan migrate:fresh --seed
  134  php artisan migrate:fresh --seed
  135  php artisan migrate:fresh --seed
  136  php artisan migrate:fresh --seed
  137  php artisan migrate:fresh --seed
  138  php artisan migrate:fresh --seed
  139  cd a:
  140  cd xampp/htdocs/grand/
  141  cd media/
  142  cd puteffort/
  143  code .
  144  cd ..
  145  ll
  146  mv main7 grid_fluid
  147  cd grid_fluid/
  148  code .
  149  cd resources/views/
  150  mkdir master.blade.php
  151  cd ..
  152  cd ..
  153  cd resources/views/
  154  rmdir master.blade.php/
  155  touch master.blade.php
  156  ssh -i "clovis20.pem" ec2-user@ec2-3-133-86-76.us-east-2.compute.amazonaws.com
  157  yes
  158  ssh -i "clovis21.pem" ec2-user@ec2-3-17-73-201.us-east-2.compute.amazonaws.com
  159  cd a:
  160  cd xampp/htdocs/grand/
  161  mkdir practice
  162  cd practice/
  163  composer create-project --prefer-dist laravel/laravel main
  164  composer update
  165  composer create-project --prefer-dist laravel/laravel main6
  166  composer create-project --prefer-dist laravel/laravel main7
  167  ssh -i "clovis21.pem" ec2-user@ec2-3-17-73-201.us-east-2.compute.amazonaws.com
  168  ssh -i "clovis21.pem" ec2-user@ec2-3-17-73-201.us-east-2.compute.amazonaws.com
  169  cd a:
  170  cd xampp/htdocs/grand/practice/appone/
  171  php artisan tinker
  172  clear
  173  php artisan tinker
  174  php artisan tinker
  175  cd ..
  176  ll
  177  git clone https://github.com/Mbere250/Laravel-8-multi-auth-based-on-Roles-with-examples.git
  178  ll
  179  cd Laravel-8-multi-auth-based-on-Roles-with-examples/
  180  subl .
  181  cd .
  182  cd ..
  183  cd appone/
  184  cd resources/views/
  185  mkdir admin users
  186  cd admin/
  187  touch index.blade.php
  188  cd ..
  189  cd users/
  190  touch index.blade.php
  191  cd ..
  192  cd ..
  193  cd ..
  194  cd a:
  195  cd xampp/htdocs/grand/practice/appone/
  196  code .
  197  cd cd ..
  198  cd .
  199  cd ..
  200  cd Laravel-8-multi-auth-based-on-Roles-with-examples/
  201  subl .
  202  cd a:
  203  cd /xampp/htdocs/grand/practice
  204  cd xampp/htdocs/grand/practice
  205  ll
  206  mv main0 custapp
  207  cd custapp/
  208  composer require laravel/ui
  209  code .
  210  cd resources/views/
  211  mkdir pages school articles
  212  cd pages/
  213  touch index.blade.php about.blade.php 
  214  cd ..
  215  cd articles/
  216  touch index.blade.php create.blade.php show.blade.php edit.blade.php
  217  cd ..
  218  cd ..
  219  cd ..
  220  su
  221  sudo su
  222  git --version
  223  cd a:
  224  cd xampp/htdocs/grand/
  225  mkdir repository
  226  cd repository/
  227  git init
  228  cat index.blade.php
  229  echo "hello and welcome to github" > index.html
  230  ll
  231  ls
  232  ls -l
  233  git status
  234  git add .
  235  git status
  236  clear
  237  cd ..
  238  ll
  239  rm -r repository/
  240  ll
  241  ll
  242  cd practice/
  243  ll
  244  mv main1 bussapp
  245  cd bussapp/
  246  php artisan make:model Article -mfcr
  247  php artisan make:model Student -mfcr
  248  php artisan make:controller PagesController
  249  composer require laravel/ui
  250  composer update
  251  php artisan ui bootstrap --auth
  252  npm install && npm run dev
  253  npm run dev
  254  code .
  255  php artisan migrate:fresh
  256  npm install bootstrap/
  257  npm install bootstrap/
  258  npm install bootstrap
  259  npm i bootstrap-icons
  260  cd resources/views/
  261  ll
  262  mkdir pages articles students users admin
  263  cd pages/
  264  touch index.blade.php about.blade.php contact.blade.php
  265  cd ..
  266  cd articles/
  267  touch index.blade.php create.blade.php show.blade.php edit.blade.php
  268  cd ..
  269  cd ..
  270  cd ..
  271  php artisan migrate
  272  php artisan migrate:fresh
  273  php artisan migrate:fresh
  274  php artisan migrate:fresh
  275  php artisan tinker
  276  clear
  277  php artisan tinker
  278  clear
  279  cd a:
  280  cd xampp/htdocs/grand/practice/
  281  ll
  282  cd bussapp/
  283  code .
  284  php artisan route:list
  285  php artisan route:list
  286  php artisan route:list
  287  php artisan route:list
  288  php artisan route:list
  289  php artisan migrate:fresh
  290  php artisan migrate:fresh
  291  cd a:
  292  cd xampp/htdocs/grand/practice/
  293  ll
  294  mv main11 dabaclovis
  295  cd dabaclovis/
  296  code .
  297  php artisan migrate
  298  cd a:
  299  cd xampp/htdocs/grand/practice/dabaclovis/
  300  php artisan migrate
  301  php artisan migrate:fresh
  302  php artisan ui bootstrap --auth
  303  cd resources/views/
  304  ll
  305  mkdir pages articles users admins
  306  cd pages/
  307  touch index.blade.php
  308  cd ..
  309  cd articles/
  310  touch index.blade.php create.blade.php show.blade.php edit.blade.php
  311  cd ..
  312  cd users/
  313  touch index.blade.php
  314  cd ..
  315  cd admins/
  316  touch index.blade.php
  317  cd ..
  318  cd ..
  319  cd ..
  320  ll
  321  cd a:
  322  cd xampp/htdocs/grand/practice/dabaclovis/
  323  code .
  324  php artisan make:controller PagesController
  325  php artisan make:model Article -mfcr
  326  php artisan migrate:fresh --seed
  327  php artisan migrate:fresh --seed
  328  php artisan migrate:fresh --seed
  329  php artisan migrate:fresh --seed
  330  php artisan migrate:fresh --seed
  331  composer require laravelcollective/html
  332  exit
  333  cd a:
  334  cd xampp/htdocs/grand/practice/
  335  ll
  336  cd ..
  337  ll
  338  cd traversy/
  339  ll
  340  npm install react-app traversy
  341  ll
  342  rm package.json 
  343  ll
  344  rm package-lock.json 
  345  ll
  346  npx create-react-app clovis
  347  npx --version
  348  cd clovis/
  349  npm start
  350  exit
  351  cd Desktop/
  352  ll
  353  cd devops/
  354  ssh -i "daba24.pem" ubuntu@ec2-18-188-98-214.us-east-2.compute.amazonaws.com
  355  exit
  356  cd Desktop/
  357  ll
  358  cd devops/
  359  ssh -i "daba24.pem" ec2-user@ec2-3-129-245-138.us-east-2.compute.amazonaws.com
  360  cd a:
  361  cd xampp/htdocs/grand/
  362  ll
  363  cd practice/
  364  ll
  365  mv main10 customdirector
  366  cd customdirector/
  367  cd ..
  368  ll
  369  cd customdirector/
  370  php artisan make:controller UserController
  371  php artisan make:controller AdminController
  372  cd resources/views/
  373  mkdir dashboard
  374  cd dashboard/
  375  mkdir users admin
  376  ll
  377  cd users/
  378  touch index.blade.php profile.blade.php
  379  cd ..
  380  cd admin/
  381  touch index.blade.php profile.blade.php
  382  ll
  383  cd ..
  384  cd ..
  385  cd ..
  386  cd ..
  387  tree
  388  sudo get-apt update
  389  code .
  390  cd a:
  391  cd xampp/htdocs/grand/practice/
  392  ll
  393  cd Laravel-8-multi-auth-based-on-Roles-with-examples/
  394  subl .
  395  cd a:
  396  cd xampp/htdocs/grand/practice/
  397  ll
  398  mv main2 bussamclan
  399  cd bussamclan/
  400  php artisan make:controller UsersController
  401  php artisan make:controller AdminsController
  402  cd resources/views/
  403  mkdir pages articles users admin
  404  cd pages/
  405  touch index.blade.php about.blade.php contact.blade.php
  406  cd ..
  407  cd articles/
  408  touch index.blade.php create.blade.php show.blade.php edit.blade.php
  409  cd ..
  410  cd users/
  411  touch index.blade.php profile.blade.php
  412  cd ..
  413  cd admin/
  414  touch index.blade.php profile.blade.php settings.blade.php
  415  cd ..
  416  cd ..
  417  cd ..
  418  code .
  419  php artisan migrate:fresh
  420  php artisan make:controller PagesController
  421  composer update
  422  cd a:
  423  cd xampp/htdocs/grand/practice/bussamclan/
  424  cd ..]
  425  cd ..
  426  ll
  427  cd Laravel-8-multi-auth-based-on-Roles-with-examples/
  428  subl .
  429  cd a:
  430  cd xampp/htdocs/grand/practice
  431  ll
  432  cd bussamclan/
  433  code .
  434  php artisan make:model Article -mfcr
  435  php artisan migrate:fresh
  436  php artisan migrate:fresh
  437  php artisan migrate:fresh
  438  php artisan migrate:fresh
  439  php artisan migrate:fresh
  440  cd ..
  441  cd Laravel-8-multi-auth-based-on-Roles-with-examples/
  442  subl .
  443  cd ..
  444  cd a:
  445  cd xampp/htdocs/grand/practice/
  446  ll
  447  mv main3 bissanclan
  448  cd bissanclan/
  449  php artisan make:controller PagesController
  450  tree
  451  cd resources/views/
  452  ll
  453  mkdir pages articles users admins
  454  ls -la
  455  ll
  456  cd users/
  457  touch index.blade.php profile.blade.php
  458  cd ..
  459  cd admins/
  460  touch index.blade.php profile.blade.php settings
  461  cd ..
  462  cd users/
  463  touch settings.blade.php
  464  cd ..
  465  ll
  466  cd articles/
  467  touch index.blade.php show.blade.php edit.blade.php create.blade.php
  468  cd ..
  469  cd ..
  470  php artisan make:model Articles -cfmr
  471  php artisan make:model Articles -mfcr
  472  cd ..
  473  php artisan make:model Articles -mfcr
  474  code .
  475  exit
  476  ll
  477  rm Docker\ Desktop.lnk 
  478  ll
  479  cd a:
  480  cd xampp/htdocs/grand/practice/bissanclan/
  481  code .
  482  code .
  483  cd resources/views/
  484  ll
  485  cd pages/
  486  ll
  487  touch index.blade.php
  488  touch about.blade.php contact.blade.php
  489  cd ..
  490  cd ..
  491  cd ..
  492  ll
  493  cd ..
  494  ll
  495  cd Laravel-8-multi-auth-based-on-Roles-with-examples/
  496  subl .
  497  cd ..
  498  cd bissanclan/
  499  php artisan route:list
  500  php artisan route:list
  501  cd a:
  502  cd xampp/htdocs/grand/practice/
  503  ll
  504  mv main4 sunillearning
  505  cd sunillearning/
  506  $ git rem
  507  $ git rem
  508  git remote add origin https://github.com/dabaclovis/sunil.git
  509  git init
  510  git remote add origin https://github.com/dabaclovis/sunil.git
  511  git master
  512  git remote
  513  clear
  514  git status
  515  git add .
  516  code .
  517  git commit -m ="learning process with sunil"
  518  git config --global user.email 'dabaclovis@yahoo.com'
  519  git config --global user.name 'Clovis Daba'
  520  git commit -m ="learning process with sunil"
  521  git push -u origin master
  522  clear
  523  git branch footer
  524  git branch 
  525  git checkout footer
  526  git branch 
  527  mkdir footer
  528  cd footer/
  529  touch index.blade.php about.blade.php
  530  ll
  531  git status
  532  git add .
  533  git status
  534  git commit -m 'footer added'
  535  git log -online
  536  git log --online
  537  git log --oneline
  538  git switch master 
  539  history
  540  cd ..
  541  git log --oneline
  542  git merge footer
  543  git status
  544  cd footer
  545  git push -u origin master
  546  git log --oneline
  547  cd ..
  548  cd footer
  549  ll
  550  git history > history.blade.php
  551  history
  552  history > contact.blade.php
