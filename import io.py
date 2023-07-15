import io

with io.open("dennis.html", "r") as f:
    contents = f.read()

print(contents)