=begin
Check to see if a string has the same amount of 'x's and 'o's.
The method must return a boolean and be case insensitive.
The string can contain any char.
=end

def XO(str)
  x = 0
  o = 0
  str.each_char do |c|
    if 'x'.casecmp(c).zero?
      x += 1
    elsif 'o'.casecmp(c).zero?
      o += 1
    end
  end
  return x == o
end
