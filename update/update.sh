#!/bin/bash
echo "Update changes from Github repo"
echo ""
echo $(cd ..)
echo Directory: $(pwd)
echo "Running: git pull origin"
echo ""
echo $(git pull origin 2>&1)
echo ""
echo "Update complete."