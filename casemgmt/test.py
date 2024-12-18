#!/usr/bin/python3

import os
import csv

project_name = "casemgmt"

DEFAULT_TEMPLATE_LOCATION = """ /Applications/MAMP/htdocs/template """

def ComposerCommands():
    #execs = ""
    #execs += "composer create-project laravel/laravel " + project_name
    #os.system(execs)
    #os.chdir(project_name)
    #os.system("pwd")
    #os.system("composer require laravel/ui "^2.0"")            - LOGINS
    #os.system("composer require guzzlehttp/guzzle")            - EMAIL
    #os.system("composer require laravel/breeze:1.9.2")         -
    #os.system("composer require sven/artisan-view --dev")      - MAKE:VIEW
    #os.system("composer require laravel/passport")             -
    pass

def CSVPassthrough():
    temp = """
    for line in data:
        module = line[0].strip()
        if module == "\ufeffModels":
            for elem in line[1:]:
                if elem == "":
                    pass
                else:
                    os.system("php artisan make:model " + elem)
        elif module == "Controllers":
            for elem in line[1:]:
                if elem == "":
                    pass
                else:
                    os.system("php artisan make:controller " + elem)
        elif module == "Migrations":
            for elem in line[1:]:
                if elem == "":
                    pass
                else:
                    os.system("php artisan make:migration " + elem)
            CompleteMigrations()
        elif module == "Views":
            for elem in line[1:]:
                if elem == "":
                    pass
                else:
                    os.system("php artisan make:view " + elem)
        else:
            print('bongo')
        """
    #Run Models
        #Parse Models Line
        #Add Stuff to Models
    #Make View Folders
    #Run Views
        #Parse View Line
        #Make Views
        #Copy View Templates
    #Run Controllers
        #Parse Controller Line
        #Add (Empty) Functions with Returns to Controllers
    #Run Migrations
    #Add Vars to Migrations
    #Alter Web Routes
    pass

def CompleteMigrations():
    pass

def SetupEnv():
    pass

def CompleteLogins():
    pass

def HelperFunctions():
    pass

def ReceiveAssets():
    def GetCSS():
        pass
    def GetJS():
        pass

    GetCSS()
    GetJS()

    pass

def ChangeRoutes():
    pass

def RunMigrations():
    os.system("php artisan migrate")

if __name__ == "__main__":
    os.system("pwd")
    with open('file.csv', newline='') as f:
        reader = csv.reader(f)
        data = list(reader)
        #print(data)
    #ComposerCommands()
    #execs = ""
    #execs += "composer create-project laravel/laravel " + project_name
    #os.system(execs)
    #os.chdir(project_name)
    #os.system("pwd")
    #os.system("composer require laravel/breeze:1.9.2")
    os.system("composer require sven/artisan-view --dev")
    #os.system("composer require laravel/passport")
    #CreateDatabaseTable
    #CSVPassthrough()
    for line in data:
        module = line[0].strip()
        if module == "\ufeffModels":
            for elem in line[1:]:
                if elem == "":
                    pass
                else:
                    os.system("php artisan make:model " + elem)
        elif module == "Controllers":
            for elem in line[1:]:
                if elem == "":
                    pass
                else:
                    os.system("php artisan make:controller " + elem + "Controller")
        elif module == "Views":
            for elem in line[1:]:
                if elem == "":
                    pass
                else:
                    os.system("php artisan make:view " + elem)
        elif module == "Migrations":
            for elem in line[1:]:
                if elem == "":
                    pass
                else:
                    os.system("php artisan make:migration " + elem)
        elif module == "Seeders":
            for elem in line[1:]:
                if elem == "":
                    pass
                else:
                    os.system("php artisan make:seeder " + elem + "Seeder")
        else:
            print('bongo')
    SetupEnv()
    CompleteLogins()
    HelperFunctions()
    ReceiveAssets()
