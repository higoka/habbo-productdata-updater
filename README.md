# habbo-productdata-updater
A tiny script to update productdata with missing names and descriptions.

#### THIS SCRIPT ONLY WORKS WITH THE **XML VERSION** OF THE PRODUCTDATA. CHANGING THE FILE EXTENSION TO .XML **DOESN'T MAKE IT A VALID XML FILE**. DOWNLOAD THE XML PRODUCTDATA FROM HABBO DIRECTLY. 
- https://www.habbo.com/gamedata/productdata_xml/0

# Usage
1. Download this repository to your computer.
2. Replace both files inside `resource` folder with your own files.
3. Open `run.bat` 

The script will compare the items inside your furindata with the items inside your productdata. If it finds one it updates the productdata with the `<name>` and `<description>` from the furnidata. Once the script is finished a new file `resource/productdata_new.xml` will be created containing the updated productdata.
 
**NOTE**: You can also uncomment **line 24 to line 28** if you want to add missing items from your furnidata to your productdata.

# Contact
Discord: higoka#7120
